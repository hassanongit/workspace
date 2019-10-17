def generate_serial_numbers(starting_serial, count=1, offset=1):
    
    if count <0:
        raise ValueError('Exception')
        
    if offset<0:
        raise ValueError('Exception')
    
    if not starting_serial:
        return []
    else:
        serial = []
        # starting_serial to base 10
        num = int(starting_serial,36)
        base36 = to_base36(num)
        #appending the start string
        serial.append(base36)
        count = count -1
        while count > 0:
            num = num+offset
            #convert num to base 36
            base36 = to_base36(num)
            serial.append(base36)
            count = count -1
            
        return serial

def to_base36(num):
    alphabet='0123456789abcdefghijklmnopqrstuvwxyz'
    base36='' 
    
    if num >=0 and num <len(alphabet):
        base36 =alphabet[num]
    else:  
        temp =''
        while num != 0:
            num, i = divmod(num, len(alphabet))
            temp = alphabet[i] + temp
            base36 =temp 
            
            
    return base36
    
    
    

