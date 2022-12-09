# Automation-of-ER-Diagram-of-an-RDBMS-System

## Compiling and generating ER diagram from the sample database
- First install the erd API into local device using the
official erd API documentation
- cd into the directory where sample database and script is loaded
- php pmysql.php sample.sql > sample.json
- ./json2erd.py -t busu < sample.json > sample.erd
- erd < sample.erd -f svg > sample.svg
