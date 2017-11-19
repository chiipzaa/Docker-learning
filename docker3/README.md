# Hadoop with Docker

จะแบ่งออกเป็นหลาย part จะได้เช้าใจง่ายขึ้น
- [ติดตั้ง Ubuntu](part1.md)
- [การดู IP Address ของ Docker Container](part2.md)
- [การใช้งาน SSH เข้าไปยัง Container](part3.md)

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



