# fonte: https://www.youtube.com/watch?v=FmEmlnvBcBw
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import pandas_datareader.data as web

# !pip install yfinance

import yfinance as yf

yf.pdr_override()

ibov = web.get_data_yahoo('^BVSP')

# print(ibov)

ibov['Close'].plot()

# print(ibov['Close'])

ibov['Dif'] = ibov['Close'] - ibov['Open']

# print(ibov['Dif'])

df = ibov.sort_values(by=['Dif'], ascending=True)

# print(df)
# print(df[:10])

google = web.get_data_yahoo('GOOG')

google['Close'].plot()

# print(google['Close'])

# googleM = google.resample('M').max()

googleM = google.resample('M').sum()

print(googleM)
