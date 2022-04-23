from django.shortcuts import render
from authentication.models import (User, Currency, Wallet)
from rest_framework.generics import (ListCreateAPIView, RetrieveUpdateDestroyAPIView)
from .serializers import (UserSerializer,CurrencySerializer,WalletSerializer)
from rest_framework.authentication import SessionAuthentication, BasicAuthentication
from rest_framework.permissions import IsAuthenticated

##########################
'''User Views'''
##########################

class UserListCreateAPIView(ListCreateAPIView):
    queryset = User.objects.all()
    serializer_class = UserSerializer
    # authentication_classes = [SessionAuthentication, BasicAuthentication]
    # permission_classes = [IsAuthenticated]

class UserRetrieveUpdateDestroyAPIView(RetrieveUpdateDestroyAPIView):
    queryset = User.objects.all()
    serializer_class = UserSerializer
    # authentication_classes = [SessionAuthentication, BasicAuthentication]
    # permission_classes = [IsAuthenticated]   

##########################
'''Currency Views'''
##########################

class CurrencyListCreateAPIView(ListCreateAPIView):
    queryset = Currency.objects.all()
    serializer_class = CurrencySerializer
    # authentication_classes = [SessionAuthentication, BasicAuthentication]
    # permission_classes = [IsAuthenticated]

class CurrencyRetrieveUpdateDestroyAPIView(RetrieveUpdateDestroyAPIView):
    queryset = Currency.objects.all()
    serializer_class = CurrencySerializer
    # authentication_classes = [SessionAuthentication, BasicAuthentication]
    # permission_classes = [IsAuthenticated]  
    
##########################
'''Wallet Views'''
##########################

class WalletListCreateAPIView(ListCreateAPIView):
    queryset = Wallet.objects.all()
    serializer_class = WalletSerializer 
    # authentication_classes = [SessionAuthentication, BasicAuthentication]
    # permission_classes = [IsAuthenticated]   

class WalletRetrieveUpdateDestroyAPIView(RetrieveUpdateDestroyAPIView):
    queryset = Wallet.objects.all()
    serializer_class = WalletSerializer
    # authentication_classes = [SessionAuthentication, BasicAuthentication]
    # permission_classes = [IsAuthenticated]  