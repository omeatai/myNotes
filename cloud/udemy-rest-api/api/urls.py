from django.urls import path
# from api.views import movie_list, movie_detail
from api.views import (StreamPlatformAPIView, StreamPlatformDetailAPIView, WatchListAPIView, WatchDetailAPIView, MovieListAPIView, MovieDetailAPIView) 

urlpatterns = [
    path('', MovieListAPIView.as_view(), name='movie_list'),
    path('<int:pk>/', MovieDetailAPIView.as_view(), name='movie_detail'),
    path('stream/', StreamPlatformAPIView.as_view(), name='stream_list'),
    path('stream/<int:pk>/', StreamPlatformDetailAPIView.as_view(), name='stream_detail'),
    path('list/', WatchListAPIView.as_view(), name='watch_list'),
    path('list/<int:pk>/', WatchDetailAPIView.as_view(), name='watch_detail'),
]