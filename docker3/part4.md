# ติดตั้ง Hadoop แบบ Single-Node Cluster

Hadoop แบบ Single-Node Cluster คือ Master Node และ Slave Node จะทำงานอยู่บนเครื่อง Computer เครื่องเดียวกัน

ถ้า “ปิดเครื่อง” ไปแล้ว ให้เข้า terminal ตรวจสอบว่ามี container process เดิมค้างอยู่หรือเปล่า
``````
docker ps -a
``````
ถ้าขึ้นและมี STATUS เป็น “Exited …” ให้ทำการ clear process เดิมเสียก่อน
``````
docker rm -f ubuntu
``````
แล้วเริ่มต้นเสียใหม่นะ
``````
docker run -d -p 2222:22 --name ubuntu rastasheep/ubuntu-sshd
``````

เริ่ม Hadoop สักที 555++
- ### สร้าง User สำหรับ Hadoop ที่จะใช้ใน ubuntu ###

ให้ทำการสร้าง user สำหรับเป็น owner ของ hadoop
สร้าง ubuntu user : “chip” , ใส่ password เป็น “[s]ystem”
``````
useradd chip
passwd chip
# หลังจากนั้นจะมีให้ใส่รหัสผ่าน
``````

สร้าง home directory และใส่ user chip เข้าสู่ group sudo
``````
mkhomedir_helper chip
usermod -aG sudo chip
``````

### จากนั้นให้ออกจาก ssh และ re-login ด้วย user: chip แทน ###
``````
user: chip
password: [s]ystem
``````

- ### สร้าง SSH Channel ในการติดต่อของ Hadoop
 ###
สร้าง Public Key เพื่ออนุญาตให้แต่ละ Node ของ Hadoop สามารถคุยกันได้อย่างอัตโนมัติ ซึ่งจะมีประโยชน์โดยที่เราไม่ต้องมาใส่ password แบบ manual ทุก ๆ ครั้ง
``````
ssh-keygen -t rsa -P "" -f ~/.ssh/id_rsa
``````

ให้ copy Public key
``````
cat $HOME/.ssh/id_rsa.pub >> $HOME/.ssh/authorized_keys
``````

เรียก bash shell จะได้ prompt ที่มี user ของเรา
``````
bash
``````
ให้ทดสอบการเชื่อมต่อ ssh ซึ่งถ้ามีคำถามให้ตอบ “yes”
``````
ssh localhost
``````

ให้สังเกตุว่า shell prompt จะเปลี่ยนไปจาก “chip@dfc78850c159:” เป็น “$” แสดงว่าสามารถใช้งาน SSH Channel ได้แล้ว
ให้พิมพ์ exit เพื่อออกมาที่ shell prompt เดิมของเรา
``````
exit
``````

************** พักยก **************

