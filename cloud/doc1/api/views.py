import imp
from django.shortcuts import render
from rest_framework import generics
from books.models import Book
from api.serializers import BookSerializer

class BookAPIView(generics.ListAPIView): 
    queryset = Book.objects.all() 
    serializer_class = BookSerializer