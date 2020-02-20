#System Design Document

###**_Purpose_**
The results of the system design process are recorded in the System Design Document (SDD). This document completely describes the system at the architecture level, including subsystems and their services, hardware mapping, data management, access control, global software control structure, and boundary conditions. The SDD should define a virtual machine that implements all requirements in the RAD, and it should provide a foundational guide for further implementation details all the way to an executable solution.

    Our system will involve a

Note that the SDD is a "live" document that should be incrementally expanded and refined during review cycles.

Audience
The audience for the SDD includes the software architect and lead members (liaisons) from each subsystem development team.

Template
Section/Topic	Description
1. Introduction
    1.1 Purpose of the system
    1.2 Design Goals
    1.3 Definitions, acronyms, and abbreviations
    1.4 References
    1.5 References
    1.6 Overview	The first section of the SDD is an Introduction. Its purpose is to provide a brief overview of the function of the system and the reasons for its development, its scope, and references to the development context (e.g., reference to the problem statement written by the client, references to existing systems, feasibility studies, and the RAD).
 
2. Current software architecture	This section describes the current state of affairs, from a system insiders perspective. Particular attention and detail should be given to any portions of the current system that may be incorporated into the new one ("legacy" code).
 
3. Proposed software architecture	This section describes the top level software architecture for the system under development.
 
    3.1 Overview	The overview presents an architectural overview of the system, the "10,000 foot" perspective. AKA: the executive summary.
 
    3.2 Subsystem decomposition
Name the top-level subsystems comprising the system, along with a description of the responsibilities of each subsystem.
 
    3.3 Software/hardware mapping
Describe how subsystems are assigned to hardware and off-the-shelf components. Also list and explain issues introduced by multiple nodes and software re-use.
 
    3.4 Persistent data managemnt
Describe the persistent data stored by the system and the data management infrastructure required for it. This section should include the description of data schemes, the selection of a database, and a description of the encapsulation of the database.
 
    3.5 Access control and security
Describe the user model of the system in terms od an access matrix. This section also describes security issues, such as the selection of an authentication mechanism, the use of encryption, and management of keys.
 
    3.6 Global software control
Describe how the global software control is implemented. In particular, this section should describe how requests are initiated and how subsystems synchronize. This section should list and address synchronization and concurrency issues.
 
    3.7 Boundary conditions
List and describe the boundary conditions: startup, shutdown, and error behavior of the system.
 
4. Subsystem architectures	For each subsystem identified in section 3.2, give the (1) subsystem architecture: its design, either as a known pattern or a new design; (2) the subsystem interface or API; and (3) a brief description of the implementation plan for the subsystem.
 
5. Glossary	A glossary of all entities defined and used in the software, to ensure consistency in the design and implementation. These definitions should be precise and expressed in the language of software developers. Where terms originate from the RAD Glossary, make appropriate correlating references. Aka the Data Dictionary