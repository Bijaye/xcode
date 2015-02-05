import base64, sys
fn = sys.argv[1]


def splitIt(encoded):
    nv = []
    n = ""
    it = 0
    for i in range(0, len(encoded)):
        it += 1
        if it <= 512:
            n += encoded[i]
        else:
            n += encoded[i]
            nv.append(n)
            n = ""
            it = 0
        # end
    # end
    nv.append(n)
    return nv
# end    

def bytes_from_file(filename, chunksize=8192):
    with open(filename, "rb") as f:
        while True:
            chunk = f.read(chunksize)
            if chunk:
                for b in chunk:
                    yield b
            else:
                break

bb = []
for b in bytes_from_file(fn):
	bb.append(b)
# end
enc = b''.join(bb)
                       
        
        

outfile = open(fn+".base64encoded", "w")
outfile.write("Dim bytA as String\n")

encoded = base64.b64encode(enc)
tmp = splitIt(encoded)
#outfile.write(encoded)

for t in tmp:
    outfile.write('bytA = bytA + "%s"\n' %(t))
    outfile.flush()
# end

outfile.close()


