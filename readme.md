## 서버 일괄 실행 스크립트 소스
<pre>
  <code>
    #!/bin/bash

    if [ -z "$1"]; then
      echo "옵션이 누락 되었습니다."
      echo "start|stop|status|restart|reload|force-reload"
    else
      echo "================================"
      echo " php7.2-fpm를 $1 합니다."
      sudo service php7.2-fpm $1

      echo " postfix를 $1 합니다."
      sudo service postfix $1

      echo " mysql를 $1 합니다."
      sudo service mysql $1

      echo " nginx를 $1 합니다."
      sudo service nginx $1

      echo "================================"
      echo " 현재 실행 중인 서비스의 목록"
      echo "================================"
      sudo service --status-all|grep +
      echo "================================"
    fi
  </code>
</pre>