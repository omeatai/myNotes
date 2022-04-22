from django.urls import include, path
# from api.views import movie_list, movie_detail
from api.views import (StreamPlatformAPIView, StreamPlatformDetailAPIView, WatchListAPIView, WatchDetailAPIView, MovieListAPIView, MovieDetailAPIView, ReviewList,ReviewDetail, ReviewCreate, StreamPlatformVS) 
from rest_framework.routers import DefaultRouter

router = DefaultRouter()
router.register('stream', StreamPlatformVS, basename='streamplatformvs')

urlpatterns = [
    path('movie/', MovieListAPIView.as_view(), name='movie-list'),
    path('movie/<int:pk>/', MovieDetailAPIView.as_view(), name='movie-detail'),
    
    path('list/', WatchListAPIView.as_view(), name='watchlist-list'),
    path('list/<int:pk>/', WatchDetailAPIView.as_view(), name='watchlist-detail'),
    
    path('review/', ReviewList.as_view(), name='review-list'),
    path('review/<int:pk>/', ReviewDetail.as_view(), name='review-detail'),
    
    path('', include(router.urls)),
    
    # path('stream/', StreamPlatformAPIView.as_view(), name='streamplatform-list'),
    # path('stream/<int:pk>/', StreamPlatformDetailAPIView.as_view(), name='streamplatform-detail'),
    
    path('stream/<int:pk>/review-create/', ReviewCreate.as_view(), name='review-create'),
    path('stream/<int:pk>/review/', ReviewList.as_view(), name='review-list'),
    path('stream/review/<int:pk>/', ReviewDetail.as_view(), name='review-detail'),
    
    
]

