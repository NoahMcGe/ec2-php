# Noah McGehee
import os
import sys
bash=os.system

def bashfun():
	bash("rm index.php -f")
	bash("cp ../opendir2/* /var/www/html/ -r")


def main():
	bashfun()

if __name__ == "__main__":
	main()

