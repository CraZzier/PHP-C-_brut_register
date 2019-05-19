#include <iostream>
#include <thread>
#include <chrono>
#include <fstream>
#include <cmath>
#include <string>
#include <windows.h>
using namespace std;

class Genfile{
public:
    static Genfile* getInstance() {
		if (!Genfile_) {
            srand(time(NULL));
			Genfile_ = new Genfile;
		}
		return Genfile_;
	}
	bool writeCsv(int argnum, char **args, string name) {
	    if(argnum<3)return false;
        ofstream myfile;
        myfile.open (name);
        double ar1 = stof(args[1]);
        double ar2 = stof(args[2]);
        for(int i=0;i<ar1;i++){
            myfile << i <<";"<< i*ar2<<";"<< sin(i*ar2)*100 <<
            ";"<<cos(i*ar2)*100<<";"<<cos(i*ar2)*100*sin(i*ar2)*100<<";"<<generateRand(-100,200)<<";"<<generateRand(1,2)<<"\n";
            this_thread::sleep_for (std::chrono::microseconds(1000000));
        }
        myfile.close();
        cout<<"Algorithm finished a work C++"<<endl;
        return true;
	}
	int generateRand(int od_jakiej_liczby, int ile_liczb){
        return (rand()%ile_liczb + od_jakiej_liczby);
	}
private:
	static Genfile* Genfile_;
	Genfile(const Genfile&) = delete;
	Genfile& operator=(const Genfile&) = delete;
	Genfile() {};
};
Genfile* Genfile::Genfile_ = nullptr;


int main(int argc, char *argv[]){
    Genfile* Gen_plikow = Genfile::getInstance();
    if(!Gen_plikow->writeCsv(argc, argv, "data.csv")){
        cout<<"Output could not be executed!"<<endl;
    }
    return 0;
}
