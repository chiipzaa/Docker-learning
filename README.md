# Docker-learning
เรียนรู้ผ่านการลงมือทำ


## ก้าวแรก ก่อนลงมือทำ
- ต้องมี docker เสียก่อนมีทั้งแบบเสียเงิน และแบบฟรี  [ดาวห์โหลด](https://www.docker.com/community-edition)
- ติดตั้งเสร็จแล้วก็ต้องเช็คว่าใช้งานได้แล้วหรือยัง
``````
docker version
``````
ผลที่ได้
![Docker version](/asset/img/docker1.png)

เออ! แล้ว Docker อะไร หาอ่านจาก google น่าจะง่ายสุด
แต่ Docker มันดีตรงที่
+ Docker ไม่ต้องเสียเวลาในสร้าง OS ใหม่ และการ config แต่ละ OS เลย
+ Docker เบาและเร็วกว่ามาก ไม่ว่าจะเป็น start stop และ restart เพราะมันใช้ OS, CPU และ RAM ร่วมกันกับ Host OS
+ Docker มีระบบ Registry ทำให้สามารถเคลื่อนย้าย หรือติดตั้ง Container ได้สะดวก และรวดเร็วกว่ามาก
+ Containers มันรันอยู่บน Docker Engine ทำให้ไม่ต้องสนใจว่า Infrastructure หรือ Host OS ว่าจะเป็นอะไรยังไง ทำให้หมดปัญหาว่าเครื่อง Dev รันได้ แต่เครื่อง Production มันรันไม่ได้บ้าง หรือเครื่อง Dev แต่ละคนติดตั้งเครื่องมือคนละเวอร์ชันกัน เราก็ build container เป็น image แล้วส่งไปใช้กัน

### คำสั่งที่ใช้บ่อย [อ่านดู](/CMD.md)

## ก้าวที่ 2 เรียนรู้ด้วยการลงมือทำ
 - *Docker #1* **Webserver ด้วย php7, mysql, nginx and phpmyadmin** [วิธีทำ](/docker1/docker1.md)

