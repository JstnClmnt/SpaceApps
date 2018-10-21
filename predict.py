#Import libraries
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

#load data
filename = '../finalized_model.sav'
newsample=pd.read_csv('data.csv')
newsample=newsample.dropna()
newsample=newsample.reset_index()
newsample

#Predict using new data
sampledata=newsample[['pl_orbper','pl_ratror','st_dens','pl_rade','pl_orbsmax','pl_eqt','pl_insol','pl_ratdor','pl_pnum','st_teff','st_logg','st_metfe','st_rad','st_mass']].dropna()
normsampledata= (sampledata - sampledata.min())/(sampledata.max() - sampledata.min())
loaded_model=pickle.load(open(filename, 'rb'))
results=loaded_model.predict_proba(normsampledata)
results=pd.DataFrame(results)
newsample["Probability of Not Habitable"]=results[0]
newsample['Probability of Habitable']=results[1]
predictresult=loaded_model.predict(normsampledata)
newsample["Results"]=predictresult
newsample.drop(newsample.columns[[0, 1]], axis=1, inplace=True)
newsample=newsample.rename(index=str, columns={"pl_hostname":"Host Name","pl_name":"Planet Name","pl_orbper": "Orbital Period[days]", "pl_ratror": " Planet-Star Radius Ratio","st_dens": "Fitted Stellar Density [g/cm**3]", "pl_rade": "Planetary Radius [Earth radii]","pl_orbsmax": "Orbit Semi-Major Axis [AU]", "pl_eqt": "Equilibrium Temperature [K]","pl_insol": "Insolation Flux [Earth flux]", "pl_ratdor": "Planet-Star Distance over Star Radius","pl_pnum":"Number of Planets","st_teff":"Stellar Effective Temperature [K]","st_logg":"Stellar Surface Gravity [log10(cm/s**2)]","st_metfe":"Stellar Metallicity [dex]","st_rad":"Stellar Radius [Solar radii]","st_mass":"Stellar Mass [Solar mass]"})
#print newdata with classified
newsample.to_csv('results.csv')
print("Succesful")