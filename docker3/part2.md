 # การดู IP Address ของ Docker Container

 โดยหลักแล้วเราจะทำงานจาก ubuntu ที่ได้ติดตั้งผ่านการ ssh ดังนั้นเราจึงจำเป็นต้องรู้ ip address ที่ใช้ในการ ssh เข้าไป

 เพื่อให้เข้าใจได้ง่าย IP Address ที่ใช้งานจะมีอยู่ 2 ตัวนะ คือ
 - Container IP คือ IP ที่ใช้ภายใน Docker Container
 - Host IP คือ IP ของระบบปฎิบัติการที่ Run Docker หรือเครื่องเรานั้นเองนะ

 คำสั่งที่ใช้ในการดู IP Address
 - Container IP
 ``````
 docker inspect ubuntu
 ``````
 - Host IP
 ``````
 ifconfig
 ``````

 หลังจากได้ IP ก็จด ๆ ไว้นะ 