import unittest
from serial import generate_serial_numbers


class TestSerial(unittest.TestCase):
    def test_empty_list(self):
        self.assertEqual(0, len(generate_serial_numbers('', 0)))
    
    def testSimpleSequentialList(self):
        serials = generate_serial_numbers('a2010', 10)
        self.assertTrue('a2010' in serials)
        self.assertTrue('a2011' in serials)
        self.assertTrue('a2012' in serials)
        self.assertTrue('a2013' in serials)
        self.assertTrue('a2014' in serials)
        self.assertTrue('a2015' in serials)
        self.assertTrue('a2016' in serials)
        self.assertTrue('a2017' in serials)
        self.assertTrue('a2018' in serials)
        self.assertTrue('a2019' in serials)
        self.assertEqual(10, len(serials))
    
    def testSimpleOffsetList(self):
        serials = generate_serial_numbers('a2010', 10, 2);
        self.assertTrue('a2010' in serials)
        self.assertTrue('a2012' in serials)
        self.assertTrue('a2014' in serials)
        self.assertTrue('a2016' in serials)
        self.assertTrue('a2018' in serials)
        self.assertTrue('a201a' in serials)
        self.assertTrue('a201c' in serials)
        self.assertTrue('a201e' in serials)
        self.assertTrue('a201g' in serials)
        self.assertTrue('a201i' in serials)
        self.assertEqual(10, len(serials))
    
    def testSmallNumber(self):
        serials = generate_serial_numbers('0', 11, 4);
        self.assertTrue('0' in serials)
        self.assertTrue('4' in serials)
        self.assertTrue('8' in serials)
        self.assertTrue('c' in serials)
        self.assertTrue('g' in serials)
        self.assertTrue('k' in serials)
        self.assertTrue('o' in serials)
        self.assertTrue('s' in serials)
        self.assertTrue('w' in serials)
        self.assertTrue('10' in serials)
        self.assertTrue('14' in serials)
        self.assertEqual(11, len(serials))
    
    def testBadCount(self):
        self.assertRaises(Exception, generate_serial_numbers, 'a2010', -1)
    
    def testBadOffset(self):
        self.assertRaises(Exception, generate_serial_numbers, 'a2010', 0, -1)

if __name__ == '__main__':
    unittest.main()
