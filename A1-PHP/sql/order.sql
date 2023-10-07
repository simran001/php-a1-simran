CREATE TABLE pizzaOrderPerson (
  id int not null auto_increment,
  fname varchar(255) NOT NULL,
  lname varchar(255) NOT NULL,
  Pizza_type varchar(255) NOT NULL,
  Pizza_size varchar(255) NOT NULL,
  toppings varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  contact varchar(255) NOT NULL,
  Delivery_address varchar(255) NOT NULL,
  primary key (id)
);

INSERT into pizzaOrderPerson(fname, lname, Pizza_type, Pizza_size, toppings, email, contact, Delivery_address)
VALUES
('Saloni', 'Singh', 'Vegetarian', 'Small','Onions', 'saloni@email.ca','2563478912', '123 Napier st.,Barrie'),
('Deep', 'Kaur', 'Non-vegetarian', 'Large','Mushrooms', 'deep@gmail.ca','7896541256', '34 Shelly lane,Barrie'),
('Abhi', 'Tiwana', 'Non-vegetarian', 'Small','Pepperoni', 'tiwana@gmail.com','8546912375', '15 Model town,Barrie'),
('Zeb', 'Cross', 'Vegetarian', 'Medium', 'Onions', 'zeb@yahoo.com','9658452146', '64 Strabane avenue, Barrie'),
('Parneet', 'Sethi', 'Non-vegetarian', 'Small', 'Onions', 'sethi123@email.com','8569785412', '3 Scott cresent,Barrie'),
('Manik', 'Smith', 'Vegetarian', 'Medium','Sausage', 'smithsmith@gmail.com','7896548569', '5 Kierland road,Barrie'),
('Chloe', 'Betal', 'Non-vegetarian', 'Large','Sausage', 'chloee@anemail.ca','7892589641', '117 Rose st.,Barrie');