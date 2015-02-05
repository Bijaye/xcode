import os, sys

i = sys.argv[1]  
print "otvaram fajl %s" %(i)
outfile = open("fixed_"+i, "wb") # otvaram fajl za pisanje
with open(i, "rb") as f:
  byte = f.read(1)
  outfile.write(byte)
  while byte != "":
    byte = f.read(1)
    outfile.write(byte)
  outfile.flush()

  # FIX NA KRAJU FAJLA
  totalb = 2
  for it in range(0, totalb):
    print "\t[%s / %s] Dodajem 1024 urandom bajta" %(it, totalb)
    tmp = os.urandom(1024*1024)
    outfile.write(tmp+"\n")
  # 
  outfile.close()
f.close()
      
    
    