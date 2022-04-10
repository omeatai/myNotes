from django.http import HttpResponse
from django import forms
from .models import User, Receptionist, Room, RoomStatus, RoomType, Booking, Payment, PaymentType, Reservation

class BookingForm(forms.Form):
    widget_select = forms.Select(attrs={
            'class': 'form-control',
            'style': 'max-width: 300px',
        })
    
    widget = forms.TextInput(attrs={
            'class': 'form-control',
            'type': 'text',
            'style': 'max-width: 300px',
        })
    
    widget2 = forms.DateTimeInput(attrs={
            'class': 'form-control',
            'type': 'datetime-local',
            'style': 'max-width: 300px',
        })

    #RoomTypes
    options =  RoomType.objects.all() 
    ROOM_TYPES = [(option.room_type,option.room_type) for option in options]
    ROOM_TYPES = tuple(ROOM_TYPES)
    
    #CustomerId
    # options =  User.objects.filter(is_admin=False, is_superadmin=False, is_staff=False) 
    # USERS = []
    # for option in options:
    #     USERS.append((option.username,f"{option.pk}-{option.username.title()}")) 
    # USERS = tuple(USERS)
    
    room_type = forms.ChoiceField(widget=widget_select, choices=ROOM_TYPES, required=True)
    customer_id = forms.IntegerField(widget=widget, required=True)
    staff_id = forms.IntegerField(widget=widget, required=True)
    payment_id = forms.IntegerField(widget=widget, required=True)
    start_date = forms.DateTimeField(widget=widget2, required=True)
    end_date = forms.DateTimeField(widget=widget2, required=True)


