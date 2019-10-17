run_tests: build
	./TestSerial
	rm ./TestSerial

build:
	-rm ./TestSerial
	gcc TestSerial.c Serial.c ./unity/unity.c -o TestSerial