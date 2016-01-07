## Getting Started with this Project Template

This empty project provides a barebones template that can be used for creating new projects for the Developer Shed organization. It's only purpose is to ensure that all Developer Shed projects include a few basic files. These files are as follows:

 - CHANGELOG.md
 - CONTRIBUTING.md
 - LICENSE
 - README.md

An additional file, Using this Template (this file), is not necessary and
should be removed from your new project.

Here is the procedure that is used to create a new project from this empty
project template.

 1. Clone this Empty Project repository to your local machine.
     git clone https://github.com/DeveloperShed/Empty-Project.git
 1. Create a new orphaned branch from the master branch.
     git checkout --orphan newBranch
 1. Check in all files by adding and committing them to the new branch.
     git add -A
     git commit -m "initial commit"
 1. Delete the master branch, removing all of the Empty Project's commit history.
     git branch -D master
 1. Rename the new branch as `master`.
     git branch -m master
 1. Create a [new repository](https://github.com/organizations/DeveloperShed/repositories/new) on GitHub inside the Developer Shed organization.
  - Give your new repository a logical name and a good description
  - Make sure you leave it set to have #public# access
  - Do NOT choose to initialize the repository with a README file
  - Leave #Add a license# set to #None#
 1. Follow the instructions to add a remote for the new repository and push your initial changes.
     git remote add origin git@github.com:DeveloperShed/<<new-project>>.git
     git push -u origin master
 1. Edit the four files listed above and add your project's files.
 1. Finally, you can delete the file your are reading from the project.

### Tips: ###

It's a good idea to include some information in your commit message about the date which the project was taken from the forums.

Alternatively, you can simply download the four files listed above and add them to the root of your existing project.  Then follow the instructions on GitHub for creating a repository from an existing project.