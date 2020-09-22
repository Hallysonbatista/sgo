/*! jQuery Validation Plugin - v1.13.1 - 10/14/2014
 * http://jqueryvalidation.org/
 * Copyright (c) 2014 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):a(jQuery)}(function(a){a.extend(a.validator.messages,{required:"Αυτό το πεδίο είναι υποχρεωτικό.",remote:"Παρακαλώ διορθώστε αυτό το πεδίο.",email:"Παρακαλώ εισάγετε μια έγκυρη διεύθυνση email.",url:"Παρακαλώ εισάγετε ένα έγκυρο URL.",date:"Παρακαλώ εισάγετε μια έγκυρη ημερομηνία.",dateISO:"Παρακαλώ εισάγετε μια έγκυρη ημερομηνία (ISO).",number:"Παρακαλώ εισάγετε έναν έγκυρο αριθμό.",digits:"Παρακαλώ εισάγετε μόνο αριθμητικά ψηφία.",creditcard:"Παρακαλώ εισάγετε έναν έγκυρο αριθμό πιστωτικής κάρτας.",equalTo:"Παρακαλώ εισάγετε την ίδια τιμή ξανά.",extension:"Παρακαλώ εισάγετε μια τιμή με έγκυρη επέκταση αρχείου.",maxlength:a.validator.format("Παρακαλώ εισάγετε μέχρι και {0} χαρακτήρες."),minlength:a.validator.format("Παρακαλώ εισάγετε τουλάχιστον {0} χαρακτήρες."),rangelength:a.validator.format("Παρακαλώ εισάγετε μια τιμή με μήκος μεταξύ {0} και {1} χαρακτήρων."),range:a.validator.format("Παρακαλώ εισάγετε μια τιμή μεταξύ {0} και {1}."),max:a.validator.format("Παρακαλώ εισάγετε μια τιμή μικρότερη ή ίση του {0}."),min:a.validator.format("Παρακαλώ εισάγετε μια τιμή μεγαλύτερη ή ίση του {0}.")})});