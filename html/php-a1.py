# Noah McGehee
import os
import sys
bash=os.system

def bashfun():
	bash("rm index.php -f")
	bash("cp ../opendir2/* /home/noah/http/html/ -r")


def main():
	bashfun()

if __name__ == "__main__":
	main()

