# Docker 실전 연습 예제입니다
### Installation
<pre>
cd /home
git clone https://github.com/EoJin-Kim/Docker-Practice.git
cd Docker-Practice
</pre>

### Run
# Login For Private Docker Repository
docker login
docker pull linexy/docker-practice
docker run -p 80:80 -v /home/ubuntu/Docker-Practice/Project:/var/www/html linexy/docker-practice
</pre>