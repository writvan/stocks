import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import pandas_datareader as data
from keras.models import load_model, Sequential 
import streamlit as st
import datetime
import pandas
from pandas_datareader import data as pdr
import yfinance as yfin
from sklearn.preprocessing import MinMaxScaler
from keras.layers import Dense, Dropout, LSTM  

yfin.pdr_override()
st.title('Stock trend Prediction')

user_input = st.text_input('enter stock ticker', 'AAPL')
df = pdr.get_data_yahoo(user_input, start='2010-01-01', end='2020-12-31')
# start = datetime.datetime(2010, 1, 1)
# end = datetime.datetime(2019, 12, 31)  


st.subheader('Data from 2010 to 2020')
st.write(df.describe())  
 
st.subheader('Closing price vs Time chart')
fig=plt.figure(figsize=(12,6))
plt.plot(df.Close)
st.pyplot(fig)


st.subheader('Closing price chart vs Time chart with 100MA')
ma100 = df.Close.rolling(100).mean()

fig=plt.figure(figsize=(12,6))
plt.plot(ma100)
plt.plot(df.Close)
st.pyplot(fig)

st.subheader('Closing price chart vs Time chart with 100MA and 200MA')
ma100 = df.Close.rolling(100).mean()
ma200 = df.Close.rolling(200).mean()

fig=plt.figure(figsize=(12,6))
plt.plot(ma100,'r')
plt.plot(ma200,'g')
plt.plot(df.Close)
st.pyplot(fig)


data_training = pd.DataFrame(df['Close'][0:int(len(df)*0.70)])
data_testing = pd.DataFrame(df['Close'][int(len(df)*0.70): int(len(df))])


scaler = MinMaxScaler(feature_range=(0,1))

data_training_array =scaler.fit_transform(data_training)

#splitting into two model trains
x_train=[]
y_train=[]


for i in range(100, data_training_array.shape[0]):
    x_train.append(data_training_array[i-100: i])
    y_train.append(data_training_array[i, 0])

x_train, y_train = np.array(x_train), np.array(y_train)
#model training
# model=Sequential()
# model.add(LSTM(units = 50, activation='relu', return_sequences=True,
#                input_shape=(x_train.shape[1],1)))
# model.add(Dropout(0.2))
# model.add(LSTM(units = 60, activation='relu', return_sequences=True))
# model.add(Dropout(0.3))
# model.add(LSTM(units = 80, activation='relu', return_sequences=True))
# model.add(Dropout(0.4))
# model.add(LSTM(units = 120, activation='relu'))
# model.add(Dropout(0.5))
# model.add(Dense(units=1))
# model.summary()

# model.compile(optimizer='adam', loss='mean_squared_error')
# model.fit(x_train, y_train, epochs=50)
# model.save('keras_model.h5')
#load model
model=load_model('keras_model.h5')

past_100_days= data_training.tail(100)

final_df = past_100_days.append(data_testing,ignore_index=True)
input_data=scaler.fit_transform(final_df)

x_test=[]
y_test=[],


for i in range(100,input_data.shape[0]):
    x_test.append(input_data[i-100: i])
    y_test.append(input_data[i, 0])
x_test, y_test = np.array(x_test), np.array(y_test)

y_predicted=model.predict(x_test)

scaler=scaler.scale_
scale_factor=1/scaler[0]
y_predicted=y_predicted*scale_factor
y_test=y_test*scale_factor

st.subheader( 'Predictions vs Original')

fig2 = plt.figure(figsize=(12,6))

plt.plot(y_test,'b', label = 'Original Price')
plt.plot(y_predicted, 'r', label = 'Predicted Price')
plt.xlabel('Time')

plt.ylabel('Price')

plt.legend()

st.pyplot(fig2)

