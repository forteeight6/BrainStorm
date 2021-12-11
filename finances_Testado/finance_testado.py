import pandas as pd
import datetime as dt
import matplotlib.pyplot as plt
import pandas_datareader.data as web
from matplotlib import style
import mplfinance as mpf

# pip install mplfinance
style.use('ggplot')

inicio = dt.datetime(2019, 1, 1)
fim = dt.datetime(2019, 12, 31)

# df = web.DataReader('TSLA', 'yahoo', inicio, fim)

# df.to_csv('tsla_2019.csv')

df = pd.read_csv('tsla_2019.csv', parse_dates=True, index_col=0)

# print(df.head())

# df.plot()
# plt.show()

mpf.plot(df, type='candle')
plt.show()
