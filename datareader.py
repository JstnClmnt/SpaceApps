from urllib.request import urlopen
from bs4 import BeautifulSoup
import ssl


url = "http://phl.upr.edu/projects/habitable-exoplanets-catalog/data#TOC-Potentially-Habitable-Exoplanets-Main-Database-"
html = urlopen('HEC_ Data of Potentially Habitable Worlds - Planetary Habitability Laboratory @ UPR Arecibo.html')

soup = BeautifulSoup(html, "html.parser")

# Retrieve all of the anchor tags
tags = soup('td')
for tag in tags:
    # Look at the parts of a tag
    print('TAG:', tag)
    print('URL:', tag.get('href', None))
    print('Contents:', tag.contents[0])
    print('Attrs:', tag.attrs)