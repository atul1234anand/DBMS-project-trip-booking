/*Count the number of male admins*/
select count(gender)
from administrator
where gender='M';
/* actual male admins are */
select name,gender
from administrator
where gender='M';
/* list employees unser a admin*/
select E.name
from employee E,administrator A
where E.admin_id=A.Id_number and A.name='Wade Jordison';
/* list packages with respective evevnts*/
select city,event_name
from package P,events E
where P.package_id=E.package_id;
/* */
select city,event_name
from package P,events E
where P.package_id=E.package_id;
order by price;
/* recognize qualifications*/
select name,qualifications
from employee,qualification
where employee_id=id_number;
/* */
select airlines_name,price
from flight
where dept_city='Bangalore' and arrival_city='Mangalore' and dept_date='2019-03-22';

/* order hotel according to prices in a city*/
select hotel_name,price
from hotel 
where city="Bangalore"
order by price;
/* reservations made by customers*/
select first_name,last_name,hotel_name,city
from reservation R,hotel H,customer C
where R.hotel_id=H.hotel_id and R.customer_id=C.customer_id;
/* Things addedby employee*/
select name,hotel_name
from employee E,hotel H
where E.id_number=H.emp_id;

select name,hotel_name
from employee E,flight F
where E.id_number=F.emp_id;

select customer_id
from customer C,reservation R
where R.customer_id=C.customer_id; 