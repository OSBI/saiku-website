#!/bin/bash
VERSION=2.3
TARGET=2.3
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-webapp/target/saiku-webapp-foodmart-$VERSION.war -O saiku-webapp-foodmart-$TARGET.war
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-webapp/target/saiku-webapp-$VERSION.war -O saiku-webapp-$TARGET.war
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-server/target/saiku-server-$VERSION.tar.gz -O saiku-server-$TARGET.tar.gz
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-server/target/saiku-server-$VERSION.zip -O saiku-server-$TARGET.zip
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-server/target/saiku-server-foodmart-$VERSION.tar.gz -O saiku-server-foodmart-$TARGET.tar.gz
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-server/target/saiku-server-foodmart-$VERSION.zip -O saiku-server-foodmart-$TARGET.zip
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-ui/target/saiku-ui-$VERSION.war -O saiku-ui-$TARGET.war
wget http://ci.analytical-labs.com/job/saiku-release/lastSuccessfulBuild/artifact/saiku-bi-platform-plugin/target/saiku-plugin-$VERSION.zip -O saiku-plugin-$TARGET.zip
