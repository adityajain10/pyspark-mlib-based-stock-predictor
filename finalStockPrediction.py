from __future__ import print_function

# $example on$
from pyspark.ml.feature import OneHotEncoderEstimator,VectorAssembler, StringIndexer
from pyspark.ml.regression import DecisionTreeRegressor
from pyspark.ml.evaluation import RegressionEvaluator
from pyspark.sql import SparkSession
from pyspark.sql import functions as F
from pyspark.sql.window import Window
from pyspark.ml import Pipeline
import matplotlib.pyplot as plt
import numpy as np

if __name__ == "__main__":
    spark = SparkSession\
        .builder\
        .appName("SVMTest")\
        .getOrCreate()

    # $example on$
    # Load the data stored in LIBSVM format as a DataFrame.
    df = spark.read.format("csv").option("header", "true").load("stocks_data.csv")

w = Window.partitionBy().orderBy("date")

df = df.withColumn('diffOpenClose',df.open-df.close)
df = df.withColumn('diffHighLow',df.high-df.low)
df = df.withColumn('target', F.when(F.lag(df.close).over(w)<df.close, 'yes').otherwise('no'))
df.drop('date')
categoricalColumns = ['high','low', 'open','close']
stages = []

    for categoricalCol in categoricalColumns:
        stringIndexer = StringIndexer(inputCol = categoricalCol, outputCol = categoricalCol + 'Index')
        encoder = OneHotEncoderEstimator(inputCols=[stringIndexer.getOutputCol()], outputCols=[categoricalCol + "classVec"])
        stages += [stringIndexer, encoder]

label_stringIdx = StringIndexer(inputCol = 'target', outputCol = 'label')
stages += [label_stringIdx]

    assembler = VectorAssembler(inputCols=[c + "classVec" for c in categoricalColumns], outputCol="features")
    stages += [assembler]
    
    pipeline = Pipeline(stages = stages)
    pipelineModel = pipeline.fit(df)
    df = pipelineModel.transform(df)
    
    df.select('close','label','features').show()
    (trainingData, testData) = df.randomSplit([0.8, 0.2])
    
    dr = DecisionTreeRegressor(labelCol="label", featuresCol="features")
    
    model = dt.fit(trainingData)
    predictions = model.transform(testData)
    
    evaluator = RegressionEvaluator(labelCol="label", predictionCol="prediction", metricName="rmse")
    rmse = evaluator.evaluate(predictions)
    print("Root Mean Squared Error (RMSE) on test data = %g" % rmse)
