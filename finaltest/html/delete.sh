#!/bin/bash



cp /etc/ansible/hosts.con /etc/ansible/hosts.con.cp

servername="mysql-container"

username="root"
password="zcl221b"
dbname="hosts"
 
SQL_QUERY="SELECT ip FROM users;"
SQL_QUERY1="SELECT username FROM users;"
SQL_QUERY2="SELECT password FROM users;"
SQL_QUERY3="SELECT ports FROM users;"

mapfile -t result < <(mysql -h $servername -u$username -p$password $dbname  -e "$SQL_QUERY" --silent --skip-column-names --raw )
mapfile -t result1 < <(mysql -h $servername -u$username -p$password $dbname  -e "$SQL_QUERY1" --silent --skip-column-names --raw )
mapfile -t result2 < <(mysql -h $servername -u$username -p$password $dbname  -e "$SQL_QUERY2" --silent --skip-column-names --raw )
mapfile -t result3 < <(mysql -h $servername -u$username -p$password $dbname  -e "$SQL_QUERY3" --silent --skip-column-names --raw )
# echo $output;

count=${#result[@]}
for((a=0;a<count;a++)); do
    echo "${result[a]}  ansible_ports='${result3[a]}' ansible_user='${result1[a]}' ansible_password='${result2[a]}'" >> /etc/ansible/hosts.con.cp
done

cat /etc/ansible/hosts.con.cp > /etc/ansible/hosts

rm /etc/ansible/hosts.con.cp



