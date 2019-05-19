#include <thread>
#include <chrono>

using namespace std;
int main(){
 this_thread::sleep_for (std::chrono::microseconds(1000000));
}
