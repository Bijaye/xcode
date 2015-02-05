# xcode
## This tool/software is made in purpose of education ONLY, usage of it is at Your own risk. All possible damage made to Your computer or third party by using any part or whole of this tool/software is at Your own responsibility. 

The tool, which is designed on the <b>TRACER FIRE</b>, represents a macro "virus" for <b>Microsoft Office</b> documents whose purpose is by launching <b>Microsoft Office</b> document with the victim's computer takes over logs, passwords, files and submit them to the attacker server. The tool is designed for educational purposes only. <b>TRACER FIRE</b> is made by the development team <b>JTRIG</b> (Joint Threat Research Intelligence Group), which is a unit of Government Communications Headquarters (<b>GCHQ</b>), the British intelligence agency [33] The existence of <b>TRACER FIRE</b> is not officially confirmed, but according to documents released publicly by Edward Snowden [34] such a tool exists. The author of this work is reading the description of the tools presented in the above PDF file, got the idea to create a tool that would have the same outcome. The software used to extract information is <b>NIR Soft Web Browser Pass View</b> [35]. It is a console and graphical tool that can extract history, user names and passwords from all popular Web Browser. EXE file is transcoded in base64 and as such has been included in the macro that is implemented in a Word document. Since VBA script that was used to write this tool has a limit on the number of characters in a row, so this tool has to abide this restriction, so transcoding divided by the number of characters in a row. For every 512 encoded characters is a new row or a new variable.

EXE document is changed by adding additional content to the end of the file, analogous to the method described in Chapter 5, but additionally packaged exe archiver <b>UPX</b> [36]. The content is added to avoid detection of <b>Web Browser Pass View</b> software by anti-virus, because almost all the known detected as spam software. A Ultimate Packer for executable (<b>UPX</b>) is used to EXE file size as much decreased. The reason of using NIR soft tools is that this tool proof of concept, ie detection of NIR soft tools by antivirus software could be bypassed by making a VBA script written by an analogous procedure that would work like NIR soft tools.

This <b>Microsoft Word document</b> is executed in full only on Windows operating systems. In order to achieve complete coverage of all the Office tools such as Libre Office, Open Office, Microsoft Office for OS X will be necessary to write in the appropriate script language, as well as paths to adjust operating systems, but also to adapt the procedure for extracting the operating system or make tool analogous NIR soft for Linux and OS X. and use the appropriate software to the appropriate operating system.

# DEMO
![Running Screen](/_imgs/1.png?raw=true "Running Screen")
![Source Code](/_imgs/2.png?raw=true "Source Code")
![Gathered Info](/_imgs/3.png?raw=true "Gathered Info")



# TODO:
* Digitaly sign word document with trusted certificate
* Automatically generate payload with unique sha256 sum from original payload for each request
* Make its own replacement for NIR Softs Software
* Adapt software for Linux and OSX


