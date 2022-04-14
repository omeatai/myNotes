from django.shortcuts import render
from django.http import HttpResponse, HttpResponseNotFound, HttpResponseRedirect
from django.views.generic import ListView, FormView
from .models import User, Receptionist, Room, RoomStatus, RoomType, Booking, Payment, PaymentType, Reservation
from .forms import BookingForm

class RoomList(ListView):
    model = Room       
    
class BookingList(ListView):
    model = Booking    

class CustomerList(ListView):
    model = User  
    
class PaymentList(ListView):
    model = Payment      
    
class BookingView(FormView):
    form_class = BookingForm
    template_name = 'hotel/booking.html'
    
    def validation(self, room, start_date, end_date):
        check = []
        booking_list = Reservation.objects.filter(room_id=room)
        for booking in booking_list:
            if booking.start_time > end_date or booking.end_time < start_date:
                check.append(True)
            else:
                check.append(False)
        return all(check) 
            
    
    def form_valid(self, form):
        data = form.cleaned_data
        room_list = Room.objects.filter(room_type_id__room_type=data['room_type'])
        if available_rooms := [room for room in room_list if self.validation(room, data['start_date'], data['end_date'])]:
            booking = Booking.objects.create(
                room_id = available_rooms[0],
                customer_id = User.objects.get(pk = data['customer_id']),
                staff_id = Receptionist.objects.get(pk = data['staff_id']),
                payment_id = Payment.objects.get(pk = data['payment_id']),
            )
            booking.save()
            return HttpResponse(booking)
        else:
            return HttpResponse("All the rooms are booked for the room type!")
            
            


def homepage(request):
    return render(request, 'hotel/home.html', {})

def single_room():
    pass

def room_booking():
    pass

def room_payment():
    pass

def room_checkin():
    pass

def room_checkout():
    pass

def admin_login(request):
    return render(request, 'hotel/login.html', {})

def dashboard(request):
    return render(request, 'hotel/dashboard.html', {})

def admin_list(request):
    return render(request, 'hotel/admin_list.html', {})

def admin_create(request):
    return render(request, 'hotel/admin_create.html', {})

def show_admin():
    pass

def edit_admin():
    pass

def delete_admin():
    pass

def logs():
    pass




