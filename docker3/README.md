# Hadoop with Docker

จะแบ่งออกเป็นหลาย part จะได้เข้าใจง่ายขึ้น
- ### [ติดตั้ง Ubuntu](part1.md) ###
- ### [การดู IP Address ของ Docker Container](part2.md) ###
- ### [การใช้งาน SSH เข้าไปยัง Container](part3.md) ###

พักยก.... ยังไม่ได้เข้าเรื่อง Hadoop เลย 555++
สรุปคำสั่งที่ใช้
``````
#Run Docker
docker run -d -p 2222:22 --name ubuntu rastasheep/ubuntu-sshd

#Stop Docker
docker stop ubuntu

#kill docker process
docker rm ubuntu
``````

- ### [ติดตั้ง Hadoop แบบ Single-Node Cluster](part4.md) ###



# ทุก ๆ ครั้ง ก่อนเลิก อย่าลืม save image ก่อนล่ะ
Save Docker State ก่อนปิดเครื่อง เราจะ save เป็น image ชื่อว่า “chip/hadoop_singlenode” เพื่อต่อไปเราจะสามารถมาทำงานต่อได้
``````
docker commit ubuntu chip/hadoop_singlenode
``````

การตรวจสอบว่า Docker Save เรียบร้อยแล้ว
``````
docker images
``````
ถ้ามี images ของเราก็แสดงว่า สามารถนอนได้แล้ว 555++

ปิด ubuntu container นอนดีกว่า
``````
docker stop ubuntu
docker rm ubuntu
``````
เช็คว่าปิดเรียบร้อยแล้ว
``````
docker ps
``````



