# დავალებები

საკლასო სამუშაო ხორციელდება იმიტაციის სახით, რომელიც მოიცავს ერთ პროექტზე სხვადასხვა გუნდების მუშაობას. იმისათვის, რომ პროცესი მაქსიმალურად მივამსგავსოთ რეალურ სამუშაო გარემოს თითოეულ ჯგუფს ექნება საკუთარი დავალება და ბრენჩი ამ დავალების შესასრულებლად.    
ქვემოთ მოცემულია 5 დავალება 5 სავარაუდო ჯგუფისთვის:

## მენიუ
branch: menu

- უნდა იმართებოდეს ადმინპანელის მეშვეობით
- ყოველი ღილაკის ტექსტი, ლინკი და პოზიცია უნდა იცვლებოდეს
- უნდა შეგვეძლოს ღილაკის ჩამატება / წაშლა
- ღილაკების მაქსიმალური რაოდენობა უნდა იყოს 10
- თუ არცერთი ღილაკი არაა, მენიუ საერთოდ არ უნდა გამოჩნდეს
- ღილაკებს უნდა ჰქონდეს მოსანიშნი “ახალი ფანჯარა”, რომლის მონიშვნის შემთხვევაში ლინკი უნდა გაიხსნას ბრაუზერის ახალ ფანჯარაში
- ღილაკებს უნდა ჰქონდეთ მოსანიშნი “ქვედა მენიუ”, რომლის მონიშვის შემთხვევაში ლინკი ფუტერშიც უნდა გამოჩნდეს (ამ ბოლო ნაწილს ფუტერის გუნდი ასრულებს)

## ფუტერი
branch: footer

- ფუტერში უნდა გქონდეთ საკონტაქტო ინფორმაცია, რომლის განახლება შესაძლებელი იქნება ადმინპანელიდან, თუმცა ახალი ინფორამციების ჩამატება – არა. 
    - ელ–ფოსტა
    - მისამართი
    - ტელეფონის ნომერი
    - მცირე ტექსტი “ჩვენს შესახებ”
- ფუტერში უნდა გამოჩნდეს მენიუს ის ლინკები, რომლებსაც მონიშნული ექნებათ “ქვედა მენიუ”
- ფუტერში უნდა ეწეროს Copyright და წელი, რომელიც ყოველთვის აჩვენებს თანამედროვე წელს, ანუ 2022–ში 2022–ს, 2023–ში 2023–ს და ა.შ.


## სიახლეები
branch: news

- განახორციელეთ სიახლეების CRUD ადმინპანელში
- გამოიტანეთ პირველი 6 სიახლე მთავარ გვერდზე დალაგებული ბოლო განახლების მიხედვით
- მთავარ გვერდზე თითოეული სიახლისთვის უნდა გამოჩნდეს:
    - სათაური
    - მოკლე აღწერა
    - დამატების თარიღი
- ღილაკის მეშვეობით მომხმარებელს უნდა შეეძლოს სიახლის გვერდზე გადასვლა და მთლიანი ტექსტი წაკითხვა


## კონტაქტი
branch: contact-page

- შექმენით კონტაქტის გვერდი, რომელზეც იქნება ფორმა ფილდებით:
    - ელ–ფოსტა*
    - სახელი
    - თემა*
    - შეტყობინება
- მომხმარებლის მიერ დასაბმიტების შემდეგ ეს ინფორმაცია უნდა შეინახოთ მონაცემთა ბაზაში და გამოსახოთ ადმინპანელში ერთ–ერთ გვერდზე შემდეგი სახით: 
    - გარედან უნდა ჩანდეს “თემა”, გამოგზავნის თარიღი და ღილაკი “გახსნა”. 
    - თუ ჯერ არავის არ გაუხსნია წერილი, “თემა” უნდა ჩანდეს bold ასეობით, ხოლო თუ ერთხელ მაინც გაიხსნა – ჩვეულებრივად
    - წერილის დეტალურ გვერდზე უნდა გამოსახოთ ყველა ინფორმაცია რაც ფორმაში შეავსო მომხმარებელმა


## ძიების გვერდი
branch: search-page

- ძიების გვერდზე საძიებო ველის მეშვეობით მომხმარებელს უნდა შეეძლოს keyword-ის მეშვეობით სიახლის ძიება:
    - სიახლის სათაურში
    - სიახლის მოკლე აღწერაში
    - სიახლის ტექსტში
- ყველა შედეგი უნდა გამოისახოს გვერდზე დალაგებული ბოლო განახლების მიხედვით (default)
- მომხმარებელს უნდა შეეძლოს შედეგების სორტირება ასევე “ძველი დამატებულის” და “ახალი დამატებულის” მიხედვით
- ძიების გვერდზე უნდა გამოჩნდეს სიახლის სათაური, დამატებით თარიღი და ღილაკი “ნახვა”, რომელიც მომხმარებელს გადაიყვანს ჩვეულებრივ სტატიის გვერდზე (რომელსაც ქმნის გუნდი #3)
