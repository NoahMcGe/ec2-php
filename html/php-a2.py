# Noah McGehee
import os
import sys
bash=os.system

def bashfun():
	bash("rm img/ -drf;rm index.php -f")
	bash("cp ../opendir1/* /var/www/html/ -r")



def main():
	bashfun()

if __name__ == "__main__":
	main()

