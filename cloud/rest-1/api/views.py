from django.shortcuts import render
from django.shortcuts import get_object_or_404
# from rest_framework.decorators import api_view
from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework import viewsets
from rest_framework import status

from rest_framework.mixins import (ListModelMixin,CreateModelMixin,RetrieveModelMixin,UpdateModelMixin,DestroyModelMixin)
from rest_framework.generics import (GenericAPIView, ListCreateAPIView, RetrieveUpdateDestroyAPIView,CreateAPIView,ListAPIView)
from watchlist_app.models import (Movie, WatchList, StreamPlatform, Review)
from .serializers import (MovieSerializer, WatchListSerializer, StreamPlatformSerializer, ReviewSerializer)


##########################
'''Wallet Views'''
##########################

class WalletApiView(generics.ListCreateAPIView):
    permission_classes = [permissions.IsAuthenticated]
    serializer_class = serializers.WalletSerializers
    queryset = Wallet.objects.all()

    # def get_serializer_context(self):
    #     context = super().get_serializer_context()

    def get(self, request):
        # return response.Response(request.COOKIES)
        serializer = serializers.WalletSerializers(self.get_queryset(), many=True) 
        return response.Response(serializer.data, status=status.HTTP_200_OK)

    def post(self, request):
        serializer = self.serializer_class(data=request.data)
        serializer.context['username_id'] = request.user
        if serializer.is_valid():
            serializer.save()
            return response.Response({'message': 'Wallet Created', 'details': serializer.data}, status=status.HTTP_201_CREATED)
        return response.Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)





##########################
'''Review Views'''
##########################

class ReviewCreate(CreateAPIView):
    # queryset = Review.objects.all()
    serializer_class = ReviewSerializer
    
    def perform_create(self, serializer):
        pk = self.kwargs.get('pk')
        movie = WatchList.objects.get(pk=pk)
        serializer.save(watchlist=movie)

class ReviewList(ListAPIView):
    # queryset = Review.objects.all()
    serializer_class = ReviewSerializer
    
    def get_queryset(self):
        pk = self.kwargs['pk']
        return Review.objects.filter(watchlist=pk)  
    
class ReviewDetail(RetrieveUpdateDestroyAPIView):
    queryset = Review.objects.all()
    serializer_class = ReviewSerializer    



# class ReviewList(ListModelMixin,CreateModelMixin,GenericAPIView):
#     queryset = Review.objects.all()
#     serializer_class = ReviewSerializer

#     def get(self, request, *args, **kwargs):
#         return self.list(request, *args, **kwargs)

#     def post(self, request, *args, **kwargs):
#         return self.create(request, *args, **kwargs)

# class ReviewDetail(RetrieveModelMixin,UpdateModelMixin,DestroyModelMixin,GenericAPIView):
#     queryset = Review.objects.all()
#     serializer_class = ReviewSerializer

#     def get(self, request, *args, **kwargs):
#         return self.retrieve(request, *args, **kwargs)

#     def put(self, request, *args, **kwargs):
#         return self.update(request, *args, **kwargs)

#     def delete(self, request, *args, **kwargs):
#         return self.destroy(request, *args, **kwargs)


##########################
'''StreamPlatformVS Viewset'''
##########################

class StreamPlatformVS(viewsets.ModelViewSet):
    queryset = StreamPlatform.objects.all() #Model Object
    serializer_class = StreamPlatformSerializer


  
#ReadOnlyModelViewSet 

class StreamPlatformVS(viewsets.ViewSet):
    
    def list(self, request):
        queryset = StreamPlatform.objects.all()
        serializer = StreamPlatformSerializer(
            queryset, 
            many=True, 
            context={'request': request})
        return Response(serializer.data)
    
    def retrieve(self, request, pk=None):
        queryset = StreamPlatform.objects.all()
        watchlist = get_object_or_404(queryset, pk=pk)
        serializer = StreamPlatformSerializer(watchlist)
        return Response(serializer.data)
        
    def create(self, request):
        serializer = StreamPlatformSerializer(data=request.data)
        if not serializer.is_valid():
            return Response(
                serializer.errors, 
                status=status.HTTP_400_BAD_REQUEST)
        serializer.save()
        message = f"The Stream Platform {serializer.data.get('name')} has been created." 
        return Response({
            "data": serializer.data,
            "message": message
            }, status.HTTP_201_CREATED)  
        
    def destroy(self, request):
        platform = StreamPlatform.objects.get(pk=pk)
        platform.delete()
        message = 'StreamPlatform deleted successfully'
        return Response({
            'message': message
            },status=status.HTTP_204_NO_CONTENT)      






##########################
'''StreamPlatform Views'''
##########################

class StreamPlatformAPIView(APIView):
    def get(self, request):
        platform = StreamPlatform.objects.all()
        serializer = StreamPlatformSerializer(
            platform, 
            many=True, 
            context={'request': request})
        if platform:
            message = "This is the complete list of stream networks."
        else:
            message = "No Streaming Platform available."  
        return Response({
            "data": serializer.data, 
            "message": message
            }, status.HTTP_200_OK)

    def post(self, request):
        serializer = StreamPlatformSerializer(data=request.data)
        if not serializer.is_valid():
            return Response(
                serializer.errors, 
                status=status.HTTP_400_BAD_REQUEST)
        serializer.save()
        message = f"The Stream Platform {serializer.data.get('name')} has been created." 
        return Response({
            "data": serializer.data,
            "message": message
            }, status.HTTP_201_CREATED)


class StreamPlatformDetailAPIView(APIView):
    def get(self, request, pk):
        try:
            platform = StreamPlatform.objects.get(pk=pk)
        except StreamPlatform.DoesNotExist:
            return Response({
                "Error": "StreamPlatform not found."
                }, status=status.HTTP_404_NOT_FOUND)    
        serializer = StreamPlatformSerializer(
            platform,
            context={'request': request}) 
        return Response({
            "data": serializer.data
            }, status=status.HTTP_200_OK)

    def put(self, request, pk):
        platform = StreamPlatform.objects.get(pk=pk)
        serializer = StreamPlatformSerializer(
            platform, 
            data=request.data)
        if not serializer.is_valid():
            return Response(
                serializer.errors, 
                status=status.HTTP_400_BAD_REQUEST)
        serializer.save()
        return Response(
            serializer.data, 
            status=status.HTTP_200_OK)

    def delete(self, request, pk):
        platform = StreamPlatform.objects.get(pk=pk)
        platform.delete()
        message = 'StreamPlatform deleted successfully'
        return Response({
            'message': message
            },status=status.HTTP_204_NO_CONTENT)
        

##########################
'''WatchList Views'''
##########################

class WatchListAPIView(APIView):
    def get(self, request):
        watchlist = WatchList.objects.all()
        serializer = WatchListSerializer(
            watchlist, 
            many=True,
            context={'request': request})
        if watchlist:
            message = "This is the complete watchlist."
        else:
            message = "No watchlist available."
        return Response({
            "data": serializer.data,
            "message": message
            }, status=status.HTTP_200_OK)

    def post(self, request):
        serializer = WatchListSerializer(data=request.data)
        if not serializer.is_valid():
            return Response(
                serializer.errors, 
                status=status.HTTP_400_BAD_REQUEST)
        serializer.save()
        message = f"The Watchlist {serializer.data.get('title')} has been created." 
        return Response({
            "data": serializer.data,
            "message": message
            }, status.HTTP_201_CREATED)


class WatchDetailAPIView(APIView):
    def get(self, request, pk):
        try:
            watchlist = WatchList.objects.get(pk=pk)
        except WatchList.DoesNotExist:
            return Response(
                {'Error': 'WatchList not found'}, 
                status=status.HTTP_404_NOT_FOUND)    
        serializer = WatchListSerializer(
            watchlist, 
            context={'request': request}) 
        return Response({
            "data": serializer.data
            }, status=status.HTTP_200_OK)
        
    def put(self, request, pk):
        watchlist = WatchList.objects.get(pk=pk)
        serializer = WatchListSerializer(
            watchlist, 
            data=request.data)
        if not serializer.is_valid():
            return Response(
                serializer.errors, 
                status=status.HTTP_400_BAD_REQUEST)
        serializer.save()
        return Response(
            serializer.data, 
            status = status.HTTP_200_OK)

    def delete(self, request, pk):
        watchlist = WatchList.objects.get(pk=pk)
        watchlist.delete()
        return Response({
            'message': 'WatchList deleted successfully'
            }, status=status.HTTP_204_NO_CONTENT)


##########################
'''Movie Views'''
##########################

class MovieListAPIView(APIView):
    def get(self, request):
        movies = Movie.objects.all() # Model Object
        serializer = MovieSerializer(movies, many=True) # Python Object
        return Response(serializer.data, status=status.HTTP_200_OK) #JSON Object

    def post(self, request):
        serializer = MovieSerializer(data=request.data)
        if not serializer.is_valid():
            return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)
        serializer.save()
        return Response(serializer.data)


class MovieDetailAPIView(APIView):
    def get(self, request, pk):
        # try:
            movie = Movie.objects.get(pk=pk) # Model Object
        # except Movie.DoesNotExist:
        #     return Response({'Error': 'Movie not found'}, status=status.HTTP_404_NOT_FOUND)    
        serializer = MovieSerializer(movie) # Python Object
        return Response(serializer.data, status=status.HTTP_200_OK) #JSON Object

    def put(self, request, pk):
        movie = Movie.objects.get(pk=pk)
        serializer = MovieSerializer(movie, data=request.data)
        if not serializer.is_valid():
            return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)
        serializer.save()
        return Response(serializer.data)

    def delete(self, request, pk):
        movie = Movie.objects.get(pk=pk)
        movie.delete()
        return Response({
            'message': 'Movie deleted successfully'
            }, 
            status=status.HTTP_204_NO_CONTENT)


#  obj = []   
# for ins in serializer.data:
#     obj.append({
#         "id": ins.get("id"),
#         "storyline": ins.get("storyline"),
#         "platform": StreamPlatform.objects.get(pk=ins.get("platform")).name,
#         "active": ins.get("active"),
#     })
# return Response({
#     # "data": serializer.data,
#     "obj": obj,
#     "message": message
#     }, status=status.HTTP_200_OK)



#Function Views
@api_view(['GET','POST'])
def movie_list(request):
    if request.method == 'GET':
        movies = Movie.objects.all() #<queryset[......]> model object
        serializer = MovieSerializer(movies, many=True) # python object
        return Response(serializer.data) #JSON object
    
    if request.method == 'POST':
        serializer = MovieSerializer(data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data)
        else:
            return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)


@api_view(['GET','PUT','DELETE'])
def movie_detail(request, pk):
    if request.method == 'GET':
        try:
            movie = Movie.objects.get(pk=pk)
        except Movie.DoesNotExist:
            return Response({'Error': 'Movie not found'}, status=status.HTTP_404_NOT_FOUND)    
        
        serializer = MovieSerializer(movie) 
        return Response(serializer.data)   
    
    if request.method == 'PUT':
        movie = Movie.objects.get(pk=pk)
        serializer = MovieSerializer(movie, data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data)
        else:
            return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)
    
    if request.method == 'DELETE':
        movie = Movie.objects.get(pk=pk)
        movie.delete()
        return Response({
            'message': 'Movie deleted successfully'
            }, 
            status=status.HTTP_204_NO_CONTENT)


