/*! jQuery Validation Plugin - v1.13.1 - 10/14/2014
 * http://jqueryvalidation.org/
 * Copyright (c) 2014 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):a(jQuery)}(function(a){a.extend(a.validator.messages,{required:"Eremu hau beharrezkoa da.",remote:"Mesedez, bete eremu hau.",email:"Mesedez, idatzi baliozko posta helbide bat.",url:"Mesedez, idatzi baliozko URL bat.",date:"Mesedez, idatzi baliozko data bat.",dateISO:"Mesedez, idatzi baliozko (ISO) data bat.",number:"Mesedez, idatzi baliozko zenbaki oso bat.",digits:"Mesedez, idatzi digituak soilik.",creditcard:"Mesedez, idatzi baliozko txartel zenbaki bat.",equalTo:"Mesedez, idatzi berdina berriro ere.",extension:"Mesedez, idatzi onartutako luzapena duen balio bat.",maxlength:a.validator.format("Mesedez, ez idatzi {0} karaktere baino gehiago."),minlength:a.validator.format("Mesedez, ez idatzi {0} karaktere baino gutxiago."),rangelength:a.validator.format("Mesedez, idatzi {0} eta {1} karaktere arteko balio bat."),range:a.validator.format("Mesedez, idatzi {0} eta {1} arteko balio bat."),max:a.validator.format("Mesedez, idatzi {0} edo txikiagoa den balio bat."),min:a.validator.format("Mesedez, idatzi {0} edo handiagoa den balio bat.")})});