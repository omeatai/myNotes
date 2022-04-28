from rest_framework import serializers
from watchlist_app.models import (Movie, Review, WatchList, StreamPlatform)


##########################
'''ReviewSerializer'''
##########################

class ReviewSerializer(serializers.ModelSerializer):
    
    class Meta:
        model = Review
        exclude = ('watchlist',)
        # fields = "__all__"

##########################
'''WatchListSerializer'''
##########################

class WatchListSerializer(serializers.ModelSerializer):
    reviews = ReviewSerializer(many=True, read_only=True)
    
    class Meta:
        model = WatchList
        fields = "__all__"


##########################
'''StreamPlatformSerializer'''
##########################

class StreamPlatformSerializer(serializers.ModelSerializer):
    watchlist = WatchListSerializer(many=True, read_only=True)
    # watchlist = serializers.StringRelatedField(many=True)
    # watchlist = serializers.PrimaryKeyRelatedField(many=True, read_only=True)
    # watchlist = serializers.HyperlinkedRelatedField(
    #     many=True,
    #     read_only=True,
    #     view_name='watch_detail'
    # )
    
    class Meta:
        model = StreamPlatform
        fields = "__all__"
        


##########################
'''MovieSerializer'''
##########################

#validators
def name_length(value):
    if len(value) > 50:
            raise serializers.ValidationError("Name is too long!")

class MovieSerializer(serializers.ModelSerializer):
    len_name = serializers.SerializerMethodField()
    
    class Meta:
        model = Movie
        fields = "__all__"
        # fields = ['id', 'name', 'description']
        # exclude = ['id']
    
    #Custom Field - SerializerMethodField
    def get_len_name(self, object):
        return len(object.name)
    
    #object validation
    def validate(self, data):
        if data['name'] == data['description']:
            raise serializers.ValidationError("Title and description should be different!")
        else:
            return data
    
    #field validation
    def validate_name(self, value):
        if len(value) < 2:
            raise serializers.ValidationError("Name is too short!")
        else:
            return value
        








#validators
def name_length(value):
    if len(value) > 50:
            raise serializers.ValidationError("Name is too long!")

class MovieSerializer(serializers.Serializer):
    id = serializers.IntegerField(read_only=True)
    name = serializers.CharField(validators=[name_length])
    description = serializers.CharField()
    active = serializers.BooleanField()
    
    def create(self,validated_data):
        return Movie.objects.create(**validated_data)
    
    def update(self, instance, validated_data):
        instance.name = validated_data.get('name', instance.name)
        instance.description = validated_data.get('description', instance.description)
        instance.active = validated_data.get('active', instance.active)
        instance.save()
        return instance
    
    #object validation
    def validate(self, data):
        if data['name'] == data['description']:
            raise serializers.ValidationError("Title and description should be different!")
        else:
            return data
    
    #field validation
    def validate_name(self, value):
        if len(value) < 2:
            raise serializers.ValidationError("Name is too short!")
        else:
            return value        
