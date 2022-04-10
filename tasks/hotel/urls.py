from django.urls import include, path
from . import views


urlpatterns = [
    path('', views.homepage, name='homepage'),
    path('rooms/', views.RoomList.as_view(), name='room_lists'),
    path('bookings/', views.BookingList.as_view(), name='booking_lists'),
    path('customers/', views.CustomerList.as_view(), name='customer_lists'),
    path('payments/', views.PaymentList.as_view(), name='payment_lists'),
    
    path('book/', views.BookingView.as_view(), name='booking_view'),
    
    path('rooms/<uuid:room_id>/', views.single_room, name='single_room'),
    path('rooms/<uuid:room_id>/booking/', views.room_booking, name='room_booking'),
    path('rooms/<uuid:room_id>/booking/payment/', views.room_payment, name='room_payment'),
    path('rooms/<uuid:room_id>/checking/', views.room_checkin, name='room_checkin'),
    path('rooms/<uuid:room_id>/checkout/', views.room_checkout, name='room_checkout'),
    path('login/', views.admin_login, name='admin_login'),
    path('dashboard/', views.dashboard, name='dashboard'),
    path('admin/', views.admin_list, name='admin_list'),
    path('admin/create/', views.admin_create, name='admin_create'),
    path('admin/<uuid:staff_id>', views.show_admin, name='show_admin'),
    path('admin/<uuid:staff_id>/edit/', views.edit_admin, name='edit_admin'),
    path('admin/<uuid:staff_id>/delete/', views.delete_admin, name='delete_admin'),
    path('admin/logs/', views.logs, name='logs'),
]
