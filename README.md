# 190504_BulletinBoard_PHP
php와 MySQL을 사용한 간단한 게시판입니다.

개인프로젝트<br>
개발기간 : 2019.05.04 ~ 05.06 (3day)<br>

php와 MySQL을 연동하여 간단한 게시판 CRUD를 구현했습니다.
글 수정과 삭제에는 비밀번호를 DB에서 찾아 일치하면 진행되도록 구현하는 것이 맞지만, 
시간이 관계상 그 부분은 생략하였습니다.

흐름은 다음과 같습니다.

1. 글목록 : list.php
2. 글작성 : writeForm.php -> process_insert.php
3. 글수정 : updateForm.php -> process_update.php
4. 글삭제 : process_delete.php
