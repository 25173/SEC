# Asymmetrische encryptie

opdracht 1
functie's van php voor asymetrische encryptie zijn: 

OPENSSL_PKCS1_PADDING (integer)
OPENSSL_SSLV23_PADDING (integer)
OPENSSL_NO_PADDING (integer)
OPENSSL_PKCS1_OAEP_PADDING (integer)

opdracht 2 
de maximale hoeveelheid byte dat rsa kan encrypten is: 256 byte.
de maximale hoeveelheid bits dat rsa kan encrypten is: 2048 bits.

opdracht 3
-ik gebruik een username / password combinatie voor mijn github in php storm/ inteliJ.
-Github gebruikt ook de ssh key zodat de juiste bestanden kan worden encrypt op de juiste device.

opdracht 4
Bob heeft een session key nodig om de bericht te encrypten. ook heeft hij een public key nodig die naar alice gaat.

alice gebruik haar private key om die de public key van bob te decrypten. na het decrypren van de public key, heeft hij nog een public key nodig om de bericht te decrypten van de session key.
