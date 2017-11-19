# Hadoop with Docker (ตอนที่ 1)

- ติดตั้ง Docker ให้พร้อมใช้งาน วิธีการติดตั้งและทดสอบการใช้งานแบบง่าย อ่านต่อที่ https://github.com/chiipzaa/Docker-learning

- เราจะใช้งาน hadoop ที่ทำงานบนระบบปฎิบัติการ Linux ดังนั้นเราจึงต้อง Run Linux บน Docker โดยเราจะใช้ Docker image ที่เป็น Ubuntu และเป็น version ที่ติดตั้ง ssh เอาไว้แล้วด้วยเพื่อสะดวกในการ ssh เข้าไปทำงาน
``````
docker pull rastasheep/ubuntu-sshd
``````
เสริม -> [Explore official Repositories:] (https://hub.docker.com/explore/)

รอ……… สักครู่ จนกว่าจะได้ docker images มา เช็คดูว่าได้มาหรือยัง
``````
docker images
``````

- เริ่ม start ubuntu container
``````
docker run -d -p 2222:22 --name ubuntu rastasheep/ubuntu-sshd
``````

คำสั่งนี้คือ จะทำการ Run container ของระบบปฏิบัติการ Ubuntu ชื่อที่ว่า “ubuntu” โดยมีการ map port 22 SSH จาก container มาที่เครื่องของเราที่ port 2222 (-p 2222:22) หลังจากนั้นเช็คหน่อยว่า container ทำงานแล้วหรือยัง
``````
docker ps
``````

เท่านี้ก็เรียบร้อยในส่วนที่ 1 การติดตั้ง ubuntu ด้วย docker