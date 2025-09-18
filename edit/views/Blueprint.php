<!--Website structure-->
https://app.diagrams.net/#LCar%20Wash%20RDBMS#%7B%22pageId%22%3A%227INZ95WTPJODNNOr0hm9%22%7D

<!--RDBMS structure-->
https://dbdiagram.io/d/RDBMS-68b53a3f777b52b76c6c800b

<!--database structure-->
Service
service_id-PK /  int    
service_name / string
description / string    
price / number          
duration / number     

Booking_Service
booking_service_id-PK / int
booking_id-FK / int            
service_id-FK / int              
quantity / number               

Customer
customer_id-PK / int         
first_name  / string           
last_name / string            
email / string                     
phone / string                   
address / string                 
username / string              
password / string               
date_registered  / datetime 

Vehicle
vehicle_id-PK / int    
customer-id-FK /  int 
plate_number / string
make / string            
model  / string          
year / number           
color / string             


Booking
booking_id-PK / int      
customer_id-FK / int     
vehicle_id-FK / int        
booking_date / datetime
booking_time / datetime
status / string                
created_at / datetime    

Payment
payment_id-PK / int       
booking_id-FK / int         
amount / number            
payment_method / string
payment_date / datetime
status / string                 

Staff
staff_id-PK / int       
first_name / string   
last_name / string   
phone / string         
role / string             
date_hired / datetime

Service_Assignment
assignment_id-PK / int
booking_id-FK / int     
staff_id-FK / int           
assigned_at / datetime



Feedback
feedback_id-PK / int        
booking_id-FK / int          
rating / number               
comment / string            
date_submitted / datetime


