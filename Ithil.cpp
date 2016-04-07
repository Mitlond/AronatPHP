#include <iostream>
using namespace std;
class Sopmod{
private:
int a;
public:
int b;
};
class Anor: public Sopmod{
public:
int t;
void show(){
cout<<"b= "<<b<<endl;
cout<<"t= "<<t<<endl;}
};
int main(){
Anor obj;
obj.b=5;
obj.t=12;
obj.show();
system("pause");
return 0;}
