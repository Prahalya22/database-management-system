#include stdio.h

int main()
{
    int a[]={1,2,3,4,5};
    n= sizeof(a)/sizeof(a[0]);
    for(int i=n;i>0;i++)
    {
        printf("%d ",a[i]);
    }
}