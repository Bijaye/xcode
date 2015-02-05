import base64, sys
fn = sys.argv[1]


infile = open(fn, "r")
lines = infile.readlines()

fn_ = fn.replace(".base64encoded", "")
outfile = open(fn+".NEW", "wb")
for line in lines:
	line = line.replace("\r", "").replace("\n", "")
	v = base64.b64decode(line)
	outfile.write(v)
	outfile.flush()
outfile.close()


