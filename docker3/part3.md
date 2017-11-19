# การใช้งาน SSH เข้าไปยัง Container

หลังจากที่เรารู้ IP Address ใน part ที่แล้ว เราก็จะเข้าไป config ubuntu ผ่าน ssh

ผมใช้ผ่านเครื่อง  mac ให้เปิด terminal ขึ้นมาอีก tab นะจะได้ดูง่ายขึ้น
ในที่นี้ เราจะ Host IP ในการติดต่อ เพราะเราได้ Map port ไว้ตั้งแต่ต้นแล้ว คือ port 2222
``````
ssh -p 2222 root@<ip address>
``````
Default Username และ Password คือ
``````
user: root
password: root
``````
 
 หลังจากที่เข้าไปแล้ว ลองทดสอบ ดู version ของ ubuntu สักหน่อยซิ ด้วย
 ``````
 cat /etc/*release
 ``````
 อืมๆๆๆ ตอนนี้เราเข้าไปใช้งาน Ubuntu version 14.04 ที่ Run อยู่ใน Docker Container ได้แล้วนะ
