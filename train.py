#IMPORT LIBRARIES
import pandas as pd
import matplotlib.pyplot as plt
from pandas.plotting import scatter_matrix
from sklearn.decomposition import PCA as sklearnPCA
from sklearn.discriminant_analysis import LinearDiscriminantAnalysis as LDA
from sklearn.datasets.samples_generator import make_blobs
from pandas.tools.plotting import parallel_coordinates
import numpy as np
from sklearn.linear_model import LogisticRegression
import matplotlib.pyplot as plt
import seaborn as sns
from sklearn import metrics
import pickle

#habitable

dfhabitable=pd.read_csv('habitable_planets_detailed_list.csv')
dfhabitable=dfhabitable[dfhabitable['koi_disposition']!='FALSE POSITIVE']
dfhabitable=dfhabitable[['rowid','kepid','kepoi_name','koi_disposition','koi_period','koi_ror','koi_srho','koi_prad','koi_sma','koi_teq','koi_insol','koi_dor','koi_count','koi_steff','koi_slogg','koi_smet','koi_srad','koi_smass']]

#nonhabitable
dfnonH=pd.read_csv('non_habitable_planets_confirmed_detailed_list.csv')
dfnonH=dfnonH[['rowid','kepid','kepoi_name','koi_disposition','koi_period','koi_ror','koi_srho','koi_prad','koi_sma','koi_teq','koi_insol','koi_dor','koi_count','koi_steff','koi_slogg','koi_smet','koi_srad','koi_smass']]
dfnonH=dfnonH[dfnonH['koi_disposition']!='FALSE POSITIVE']

#drop unneeded habitable columns for training
df=dfhabitable.drop(columns=['rowid','koi_disposition','kepid','kepoi_name'])
data_norm = (df - df.min())/(df.max() - df.min())
pca = sklearnPCA(n_components=2)
transformed = pd.DataFrame(pca.fit_transform(data_norm))
transformed["Habitable"]=True

#drop unnedded unhabitable columns for training 
dfnonTail=dfnonH.drop(columns=['rowid','koi_disposition','kepid','kepoi_name']).tail(1000)
dfnonHead=dfnonH.drop(columns=['rowid','koi_disposition','kepid','kepoi_name']).head(1219)
dffinalnonH=pd.concat([dfnonTail, dfnonHead])
non_norm= (dffinalnonH - dffinalnonH.min())/(dffinalnonH.max() - dffinalnonH.min())
pca = sklearnPCA(n_components=2)
nontransformed = pd.DataFrame(pca.fit_transform(non_norm))
nontransformed["Habitable"]=False

#put clustered data
df["Habitable"]=True
dffinalnonH["Habitable"]=False

#concat final unhabitable dataframe
dffinal=pd.concat([transformed, nontransformed])

#load data set and test set
x_trainingH=df.head(75)
x_testH=df.tail(49)
x_trainingnonH=dffinalnonH.head(1406)
x_testnonH=dffinalnonH.tail(813)
x_training=pd.concat([x_trainingH,x_trainingnonH],sort=False)
x_test=pd.concat([x_testH,x_testnonH])
y_train=x_training['Habitable']
y_test=x_test['Habitable']
x_training=x_training[['koi_period','koi_ror','koi_srho','koi_prad','koi_sma','koi_teq','koi_insol','koi_dor','koi_count','koi_steff','koi_slogg','koi_smet','koi_srad','koi_smass']]
x_test=x_test[['koi_period','koi_ror','koi_srho','koi_prad','koi_sma','koi_teq','koi_insol','koi_dor','koi_count','koi_steff','koi_slogg','koi_smet','koi_srad','koi_smass']]

#Logistic Regression
logisticRegr = LogisticRegression(max_iter=1000)
logisticRegr.fit(x_training, y_train)

#Save File
filename = 'finalized_model.sav'
pickle.dump(logisticRegr, open(filename, 'wb'))

#Print Accuracy
predictions = logisticRegr.predict(x_test)
score = logisticRegr.score(x_test, y_test)
print(score)